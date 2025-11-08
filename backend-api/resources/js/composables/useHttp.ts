// composables/useHttp.ts
export function useHttp() {
  /**
   * Realiza una solicitud HTTP genérica
   * @param url La ruta del endpoint
   * @param method Método HTTP: GET, POST, PUT, DELETE
   * @param body Datos opcionales para el body
   * @param headers Headers opcionales
   */
  async function httpRequest<T>(
    url: string,
    method: 'GET' | 'POST' | 'PUT' | 'DELETE' = 'GET',
    body?: any,
    headers: Record<string, string> = {}
  ): Promise<T> {
    const defaultHeaders = { 'Content-Type': 'application/json', ...headers }

    const options: RequestInit = {
      method,
      headers: defaultHeaders,
      body: body ? JSON.stringify(body) : undefined,
    }

    const response = await fetch(url, options)

    if (!response.ok) {
      const errorData = await response.json().catch(() => null)
      const message = errorData?.message || `Error en la solicitud ${response.status}`
      throw new Error(message)
    }

    return response.json()
  }

  return { httpRequest }
}
